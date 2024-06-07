<div class='d-flex justify-content-center align-items-center' style='width: 100vw; height: 100vh;'>
    <div class="card">
        <div class="card-body">
            @error("exist")
                {{ $message }}
            @enderror
            @error("registered")
                {{ $message }}
            @enderror
            <input wire:model="email" type="email" name="email" class="form-control" placeholder="Email" id="">
            <input wire:model="password" type="password" name="password" class="form-control mt-2" id="" placeholder="Password">
            <div class="d-flex align-items-center">
                <button wire:click="save" class="btn btn-primary mt-2">Register</button>
                <a href="/login" class="ms-auto">Have account?</a>
            </div>
        </div>
    </div>
</div>
