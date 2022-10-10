<div class="wrap">
    <h4>Вы успешно записались!</h4>
    <p><b>{{ $record->user->firstname }}</b>&nbsp;<b>{{ $record->user->lastname }}</b></p>
    <p>Запись на {{ $record->recorded_at }}</p>
    <p>Ваш E-mail {{ $record->user->email }}</p>
</div>
