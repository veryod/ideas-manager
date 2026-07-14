<nav>
  <ul class="flex p-8 flex justify-between gap-32 text-2xl bg-gray-900">
    @guest
      <div class="login-functions flex">
        <li class="mr-6"><a class="text-blue-500 hover:underline" href="/register">Sign up</a></li>
        <li class="mr-6"><a class="text-blue-500 hover:underline" href="/login">Sign in</a></li>
      </div>
    @endguest
    @auth
      <div class="idea-functions flex">
        <li class="mr-6"><a class="text-blue-500 hover:underline" href="/ideas">Ideas</a></li>
        <li class="mr-6"><a class="text-blue-500 hover:underline" href="/ideas/new">New</a></li>
      </div>
      <div class="account-functions flex">
        <li class="mr-6"><a class="text-blue-500 hover:underline" href="/users/edit">Account</a></li>
        <form action="/logout" method="post">
          @csrf
          @method('DELETE')
          <button class="text-red-500 hover:underline hover:cursor-pointer" type="submit" data-test="logout-btn">Sign out</button>
        </form>
      </div>
    @endauth
  </ul>
</nav>