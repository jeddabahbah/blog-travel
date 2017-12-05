@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">contact</div>

                <div class="panel-body">
                    {{ csrf_field() }}
                    <input type="text" id="contactName" name="contactName" placeholder="name">
                    <input type="email" id="contactEmail" name="contactEmail" placeholder="email">
                    <input type="text" id="contactComment" name="contactComment" placeholder="comment">
                    <button type="submit" id="add">ADD</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#add").click(function() {
      $.ajax({
        type: 'POST',
        url: '/contact-us',
        data: {
          '_token': $('input[name="_token"]').val(),
          'name': $('input[name="contactName"]').val(),
          'email': $('input[name="contactEmail"]').val(),
          'comment': $('input[name="contactComment"]').val(),
        },
        success: function(data) {
          alert(data);
          console.log(data)
        },
      });
      $('#name').val('');
      $('#email').val('');
      $('#comment').val('');

    });
</script>

@endsection
