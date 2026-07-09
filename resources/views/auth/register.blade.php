<x-layouts.layout>
    <form action="/register" method="post" class="form w-128">
        <div class="field">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="password" placeholder="johndoe@exmaple.com" required>
        </div>
        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="name" name="email" placeholder="******************" required>
        </div>
        <div class="actions">
            <button class="form-btn" type="submit">Register</button>
        </div>
    </form>
</x-layouts.layout>