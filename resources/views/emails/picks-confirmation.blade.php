<h2>TSBP Pick Confirmation</h2>
<p>This is a confirmation of your picks.</p>
<ul style="list-style-type:none;">
@foreach($pick_confirmation as $pick)
    <li><strong>pick:</strong> {{ $pick['pick'] }} ({{ $pick['spread'] }}) [<strong>opponent:</strong> {{ $pick['opponent'] }}]</li>
@endforeach
</ul>
<p>If you have any questions, please email me, constenum@gmail.com</p>
&nbsp;
<p>Good Luck,</p>
<em>Mark</em>
