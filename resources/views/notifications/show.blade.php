@extends('layout')

@section('content')
    <div class="container">
     <ul>
         @forelse( $notifications as $notificaion)
             <li>
                 @if($notificaion->type == 'App\Notifications\PaymentRecieved')
                     Payment recieved {{ $notificaion->data['amount'] }} .
                 @endif
             </li>
         @empty
             <li> You have no Noti.</li>
         @endforelse
     </ul>
    </div>
@endsection
