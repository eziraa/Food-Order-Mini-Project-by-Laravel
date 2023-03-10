@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Food</h1>
    <form action="/foods/storeFood" method="POST" >
        @csrf
        <label for="name">Food name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="type">Food type</label><br>
        <select name="type" id="name">
            <option value="mail">Main Course</option>
            <option value="beverage">Beverage</option>
            <option value="Drinks">Drink</option>
        </select>
        <label for="price">Price: </label>
        <input type="number" name="price" id="price">
        <label for="quantity">Quantity: </label>
        <input type="number" name="quantity" id="quantity">
        <input type="submit" value="Add food">       
    </form>
</div>
</div>
@endsection