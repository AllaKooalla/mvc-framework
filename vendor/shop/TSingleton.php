<?php

namespace shop;

// паттерн синглтон
// позволяет содержать только один экземпляр объекта в приложении,
// которое будет обрабатывать все обращения, запрещая создавать новый экземпляр

// трейт - это механизм обеспечения повторного использования кода в языках с поддержкой только одиночного наследования
// невозможно создать самостоятельный экземпляр трейта. это дополнение к обычному наследованию
trait TSingleton
{   
    // сюда будем записывать экземаляр класса
    private static ?self $instace = null;

    private function __construct(){}

    public static function getInstance(): static
    {
        // если что-то есть в static::$instace, то вернем его,
        // если же нет, то запишем new static()
        return static::$instace ?? static::$instace = new static();
    }

}

?>