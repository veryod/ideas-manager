@vite(['resources/js/addLinks.js', 'resources/js/addSteps.js'])
<x-layouts.layout>
    <div>
        <form action="/ideas" method="post" class="form w-2xl" autocomplete="off">
            @csrf
            <div class="field">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter a title here..." required>
                @error('title')
                    <div class="error flex text-red-500 mb-4">{{ $message }}</div>
                @enderror
            </div>
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

            <div class="steps-container">
                <label for="steps">Steps</label>
            </div>
            <button class="add-step-btn font-semibold text-2xl text-gray-100 border w-full mb-4" type="button" data-test="add-step-btn">+</button>
            @error('steps.*')
                <div class="error flex text-red-500 mb-4">{{ $message }}</div>
            @enderror

            <div class="links-container">
                <label for="links">Links</label>
            </div>
            <button class="add-link-btn font-semibold text-2xl text-gray-100 border w-full mb-4" type="button" data-test="add-link-btn">+</button>
            @error('links.*')
                <div class="error flex text-red-500 mb-4">{{ $message }}</div>
            @enderror

            <div class="actions">
                <button class="form-btn" type="submit" data-test="create-btn">Create</button>
            </div>
        </form>
    </div>
</x-layouts.layout>