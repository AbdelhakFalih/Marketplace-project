@include('layouts.user')
@section('header')
    <header>
        @include('partials.Components', ['compo' => 'sidebar', 'user_id' => auth()->id()])
    </header>
@endsection
@section('content')
    <div class="container mt-5">
        <section class="edit-password>
            <h2 data-i18n="editPassword">{{ __('Modifier le mot de passe') }}</h2><br>
            <form action="{{ route('user-reset') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label style="font-size: 1.25rem;"> <span data-i18n="currentPassword">{{ __('Mot de passe actuel') }}</span> </label>
                    <input type="password" name="current_password" class="form-control" required style="width: 100%;"><br>
                </div>
                <div class="mb-3">
                    <label style="font-size: 1.25rem;"><span data-i18n="newPassword">{{ __('Nouveau mot de passe') }}</span> : </label>
                    <input type="password" name="new_password" class="form-control" required style="width: 100%;"><br>
                </div>
                <div class="mb-3">
                    <label style="font-size: 1.25rem;"> <span data-i18n="confirmNewPassword">{{ __('Confirmer le nouveau mot de passe') }}</span> </label>
                    <input type="password" name="new_password_confirmation" class="form-control" required style="width: 100%;"> <br>
                </div>
                <div>
                    <input type="submit" value="{{ __('Enregistrer') }}" class="btn btn-outline-primary btn-block">
                    <input type="reset" value="{{ __('Annuler') }}" class="btn btn-outline-secondary btn-block">
                </div>
            </form>
        </section>
    </div>
@endsection

