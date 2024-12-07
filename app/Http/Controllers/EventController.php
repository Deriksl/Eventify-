<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Obtener los eventos con paginación
        $events = Event::with('user')->paginate(10);  // Cambié 'get()' por 'paginate(10)'

        // Pasar los eventos a la vista
        return view('home', compact('events'));
    }



    public function myevents()
    {
        // Obtener los eventos creados por el usuario
        $createdEvents = Event::where('user_id', auth()->id())->get();

        // Obtener los eventos a los que el usuario asiste
        $attendingEvents = auth()->user()->attendingEvents()->get();

        // Pasar los eventos a la vista
        return view('myevents', compact('createdEvents', 'attendingEvents'));
    }

    // Método para mostrar el formulario de creación de evento
    public function create()
    {
        return view('events.create');
    }

    // Método para almacenar un evento
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'logo' => 'nullable|image|max:1024',
        ]);

        $event = new Event();
        $event->name = $validated['name'];
        $event->description = $validated['description'];
        $event->location = $validated['location'];
        $event->date = $validated['date'];
        $event->status = 'upcoming';
        $event->user_id = auth()->id();

        if ($request->hasFile('logo')) {
            $event->logo = $request->file('logo')->store('logos', 'public');
        }

        $event->save();

        return redirect()->route('myevents')->with('success', 'Evento creado exitosamente.');
    }

    // Método para editar un evento
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    // Método para actualizar un evento
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|max:500',
            'location' => 'nullable|max:255',
            'date' => 'required|date',
            'status' => 'required|max:255',
            'logo' => 'nullable|image|max:2048',
        ]);

        $event = Event::findOrFail($id);

        // Actualizar campos
        $event->update($validated);

        // Manejo del logo
        if ($request->hasFile('logo')) {
            // Eliminar el logo viejo si es necesario
            if ($event->logo) {
                \Storage::delete('public/' . $event->logo);
            }
            $path = $request->file('logo')->store('logos', 'public');
            $event->logo = $path;
            $event->save();
        }

        // Redirigir a la página de "Mis eventos" después de la actualización
        return redirect()->route('myevents')->with('success', 'Evento actualizado exitosamente.');
    }

    // Método para eliminar un evento
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('myevents')->with('success', 'Evento eliminado exitosamente.');
    }
}
