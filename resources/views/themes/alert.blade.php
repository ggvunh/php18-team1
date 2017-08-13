@if ($message = Session::get('success'))
<script type="text/javascript">
	toastr.success('<?php echo $message; ?>', 'Thành công', {timeOut: 5000})
</script>
<?php Session::forget('success');?>
@endif

@if ($message = Session::get('error'))
<script type="text/javascript">
	toastr.error('<?php echo $message; ?>', 'Lỗi', {timeOut: 5000})
</script>
<?php Session::forget('error');?>
@endif