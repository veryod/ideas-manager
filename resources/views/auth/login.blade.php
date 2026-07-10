<x-layouts.layout>
    <form action="/login" method="post" class="form w-128" autocomplete="off">
        <x-auth.field name="email" label="Email" type="email" placeholder="johndoe@gmail.com"></x-auth.field>        
        <x-auth.field name="password" label="Password" type="password" placeholder="**********"></x-aut.field>
        <div class="actions"><button class="form-btn" type="submit">Sign In</button></div>
    </form>
</x-layouts.layout>