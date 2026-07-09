<x-layouts.layout>
    <form action="/login" method="post" class="form w-128">
        <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="password" placeholder="johndoe@exmaple.com" required>
        </div>
        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="name" name="email" placeholder="******************" required>
        </div>
        <div class="actions">
            <button class="form-btn" type="submit">Sign in</button>
        </div>
    </form>
</x-layouts.layout>