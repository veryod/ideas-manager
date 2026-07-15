@vite(['resources/js/addLinks.js'])
<x-layouts.layout>
    <div>
        <form action="/ideas" method="post" class="form w-2xl" autocomplete="off">
            @csrf
            <x-auth.field name="title" label="Title" type="text" placeholder="Enter a title here..."></x-auth.field>

            <div class="field">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="6" placeholder="Enter a description here..."></textarea>
                @error('description')
                    <div class="error flex text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="field">
                <label for="status">Status</label>
                <select name="status" id="status" data-test="select-status">
                    <option value="pending">Pending</option>
                    <option value="in_progress">In progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="links-input">
                <label for="link">Links</label>
            </div>
            <div class="actions">
                <button class="form-btn" type="submit" data-test="create-btn">Create</button>
            </div>
        </form>
    </div>
</x-layouts.layout>