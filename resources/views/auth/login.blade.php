<x-layout.guest>
      <div class="card w-full max-w-md shadow-xl bg-base-100">
    <div class="card-body">
      
      <h2 class="card-title text-2xl justify-center mb-4">
        Login
      </h2>

      <form method="POST" action="/">
        @csrf
        <!-- Email -->
        <div class="form-control mb-3">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input
            type="email"
            name="email"
            placeholder="email@example.com"
            class="input input-bordered w-full"
            required
          />
        </div>
        <x-error name="email" />

        <!-- Password -->
        <div class="form-control mb-3">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input
            type="password"
            name="password"
            placeholder="••••••••"
            class="input input-bordered w-full"
            required
          />
          {{-- <label class="label">
            <a href="#" class="label-text-alt link link-hover">
              Forgot password?
            </a>
          </label> --}}
        </div>

        <!-- Button -->
        <div class="form-control">
          <button class="btn btn-primary w-full">
            Login
          </button>
        </div>
      </form>


    </div>
  </div>
</x-layout.guest>