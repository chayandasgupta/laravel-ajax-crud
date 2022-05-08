@section('js')
  <script>
     $(document).on('click', '#addModal', function() {
       $("#addmodal").show();
     })

     // Close Modal
     $(document).on('click', '#closeModal', function() {
       $("#addmodal").hide();
     })

     // add student ajax call
     $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });

     $("#addStudent").click(function() {
        $.ajax({
         type: "post",
         url: 'add-student',
         data: {
            'name': $('input[name=name]').val(),
            'dept': $('input[name=dept]').val(),
            'shift': $('input[name=shift]').val(),
         },
         dataType: 'JSON',
         success: function(response) {
          console.log(response)
           if(response) {
               $('#addmodal').hide();
               $('.success-message').removeClass('d-none');
               $('.success-message').text('Student inserted successfully');   
           }
         },
         error: function(response) {
           if(response.responseJSON.errors)
           {
              $('.name-error').text(response.responseJSON.errors.name)
              $('.dept-error').text(response.responseJSON.errors.dept)
              $('.shift-error').text(response.responseJSON.errors.shift)
           }
         }
       })
     })
  </script>
@endsection