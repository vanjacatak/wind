Click here to reset your password! <br>

<a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->
getEmailForPasswordReset()).'&pero=peric' }}">{{ $link }}</a>
