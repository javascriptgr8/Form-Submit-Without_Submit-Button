<form method="get" id="searchform" action="/batch/running-batches">
    <select class="form-control" name="search_course" onchange="submit()">
        <option>Select Course</option>
        @foreach($searchcourse as $scourse)
        <option value="{{$scourse->id}}">{{$scourse->course}}</option>
        @endforeach
    </select>
</form>


<script>
    function submit(){
        let form = document.getElementById("searchform");
        form.submit();
    }
</script>
