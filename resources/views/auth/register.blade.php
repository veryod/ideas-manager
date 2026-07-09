<x-layouts.layout>
    <form action="/register" method="post" class="form w-128">
        <x-auth.field name="name" label="Name" type="text" placeholder="John Doe"></x-auth.field>
        <x-auth.field name="email" label="Email" type="email" placeholder="johndoe@gmail.com"></x-auth.field>        
        <x-auth.field name="password" label="Password" type="password" placeholder="**********"></x-aut.field>
        <div class="actions"><button class="form-btn" type="submit">Register</button></div>
    </form>
</x-layouts.layout>