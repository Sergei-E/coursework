<div class="authorization-form">
    <input class="authorization-form-name" type="text" placeholder="логин" wire:model="login" name="username">
    <input class="authorization-form-password" type="password" placeholder="пароль" name="password">
    <?//<input class="authorization-form-submit" type="submit" value="Войти">?>
    <button wire:click="update"> Войти </button>
    {{ $login }}
</div>
