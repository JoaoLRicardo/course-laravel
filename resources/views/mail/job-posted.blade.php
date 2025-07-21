<h2>{{ $job->title }}</h2>
<p>
    Parabéns sua vaga foi postada no portal de empregos!
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">Veja sua vaga publicada.</a>
</p>
