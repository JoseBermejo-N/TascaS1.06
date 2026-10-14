<?php

class RecursoDidacticos {
    private string $name;
    private Tema $topic;
    private string $url;
    private TipoDeRecurso $type;

    public function __construct(string $name, Tema $topic, string $url, TipoDeRecurso $type) {
        $this->name = $name;
        $this->topic = $topic;
        $this->url = $url;
        $this->type = $type;
    }
    public function __toString(): string {
        return "*** Recurso Didactico ***\n" .
               "Nombre: " . $this->name . "\n" .
               "Tema: " . $this->topic->value . "\n" .
               "Tipo de recurso: " . $this->type->value . "\n" .
               "URL: " . $this->url . "\n \n";
               
    }

}