<video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline crossorigin="anonymous" width="640" height="450" poster="{{URL::to('/'.$episode_info->video_image)}}" data-setup="{}" @if(get_player_cong('autoplay')=="true")autoplay="true"@endif>
							  	
		  	<!-- video source -->
		  	<source src="{{$episode_info->video_url}}" type="application/x-mpegURL" />  
				@if($episode_info->subtitle_on_off)
				<!-- video subtitle -->
			@if($episode_info->subtitle_url1)
				<track kind="captions" src="{{$episode_info->subtitle_url1}}"   label="{{$episode_info->subtitle_language1?$episode_info->subtitle_language1:'English'}}" default>		
			@endif
			@if($episode_info->subtitle_url2)
				<track kind="captions" src="{{$episode_info->subtitle_url2}}"   label="{{$episode_info->subtitle_language2?$episode_info->subtitle_language2:'English'}}">		
			@endif
			@if($episode_info->subtitle_url3)
				<track kind="captions" src="{{$episode_info->subtitle_url3}}"    label="{{$episode_info->subtitle_language3?$episode_info->subtitle_language3:'English'}}">		
			@endif	
			@endif

			<!-- worning text if needed -->
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>