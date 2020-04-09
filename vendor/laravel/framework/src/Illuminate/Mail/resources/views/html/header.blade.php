<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<h4>{{ \App\Config::SITE_NAME }}</h4>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
