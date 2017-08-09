$( document ).ready(function() {
  function ud_find_text(self) {
      var children = self.parentNode.getElementsByTagName('input');
      for (var i = 0; i < children.length; i++) {
          if (children[i].getAttribute('type') == 'text') {
              return children[i];
          }
      }
  }

  function ud_inc(self) {
      var text = ud_find_text(self);
      text.value++;
  }

  function ud_dec(self) {
      var text = ud_find_text(self);
      if (text.value > 0) text.value--;
  }

    function down(rowId){
        $root = '{{ url('/') }}';
        $.get($root + rowId + '/' + 'downqty', function(data, status){
            var subtotal = data.subtotal;
            //console.log(data);
            $('#' + rowId).replaceWith('<input type="text" id="' + rowId + '" name="quantity" value="' + data.qty + '">');
            $('#amount' + rowId).replaceWith('<span class="amount" id="amount' + rowId + '">' + subtotal + '</span>');
            $('#total').replaceWith('<span id="total">' + data.total + '</span>');
        });
    }

    function up(rowId){
        //console.log(rowId);
        $root = '{{ url('/') }}';
        $.get($root + rowId + '/' + 'upqty', function(data, status){
            var subtotal = data.subtotal;
            //console.log(data);
            $('#' + rowId).replaceWith('<input type="text" id="' + rowId + '" name="quantity" value="' + data.qty + '">');
            $('#amount' + rowId).replaceWith('<span class="amount" id="amount' + rowId + '">' + subtotal + '</span>');
            $('#total').replaceWith('<span id="total">' + data.total + '</span>');
        });
    }

});
