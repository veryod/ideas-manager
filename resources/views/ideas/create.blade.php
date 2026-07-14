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
                <select name="status" id="status">
                    <option value="pending">Pending</option>
                    <option value="in_progress">In progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="action">
                <button type="submit" class="form-btn">Create</button>
            </div>
        </form>
    </div>
</x-layouts.layout>