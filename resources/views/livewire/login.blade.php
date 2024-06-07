<div class='d-flex justify-content-center align-items-center' style='width: 100vw; height: 100vh;'>
    <div class="card">
        <div class="card-body p-3">
            @error("email")
                {{ $message }}
            @enderror
            @error("password")
                {{ $message }}
            @enderror
            <input wire:model="email" type="email" name="email" class="form-control" placeholder="Email" id="">
            <input wire:model="password" type="password" name="password" class="form-control mt-2" id="" placeholder="Password">
            <div class="d-flex align-items-center">
                <button wire:click="auth" class="btn btn-primary mt-2">Login</button>
                @livewire("custom.button", ["value" => "Register", "href" => "/register", "class" => "mt-2 ms-2 me-2"])
                <a class="ms-auto">Forgot password?</a>
            </div>
        </div>
    </div>
</div>
