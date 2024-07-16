<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use Illuminate\Console\Command;

class SendMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:txt {texto?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Manda un evento con el texto de la consola

        echo "Mensaje enviado desde consola\n";

        if ($this->argument('texto') == null) {
            event(new TestEvent("Probando el envío de mensajes por la consola"));
            return;
        }
        event(new TestEvent($this->argument('texto')));
    }
}
