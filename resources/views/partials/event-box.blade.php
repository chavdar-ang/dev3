<div class="item box">
	<div class="cover" style="background: url(https://d3cwccg7mi8onu.cloudfront.net/266x132/{{ $event->cover }})">
		<a href="/c/{{ $event->theme->company->slug }}" class="c-logo">
			<div style="background: url(https://d3cwccg7mi8onu.cloudfront.net/56x56/{{ $event->theme->company->logo }})"></div>
		</a>
	</div>
	<div class="content">
		<a href="/event/{{ $event->id }}" class="title">
			{{ $event->theme->title }}
		</a>
		<div class="date">
			{{ $event->start_date_carbon }}
		</div>
	</div>
	<div class="footer">
		<div class="aligned">
			<div class="price">
				{{ $event->price }} лв.
			</div>
			<div class="aligned comments">
				<i class="fas fa-eye"></i>
				{{ $event->visits }}
			</div>
		</div>
	</div>
</div>