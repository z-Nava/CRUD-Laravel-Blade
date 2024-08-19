<?php

namespace App\Events;

use App\Models\Cliente;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ClienteUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $cliente;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente)
    {
        $this -> cliente = $cliente;
    }

    public function broadcastOn()
    {
        return new Channel('clientes');
    }

    public function broadcastWith()
    {
        return [
            'id' => $this -> cliente -> id,
            'nombre' => $this -> cliente -> nombre,
            'apellido' => $this -> cliente -> apellido,
            'email' => $this -> cliente -> email,
            'telefono' => $this -> cliente -> telefono,
            'departamento_id' => $this -> cliente -> departamento_id,
        ];
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    
}
