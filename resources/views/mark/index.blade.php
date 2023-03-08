<html>
<head></head>
<table>
<thead>
<tr>Student </tr>&nbsp;&nbsp;
<tr>Subject </tr>&nbsp;&nbsp;
<tr>Marks</tr></thead>&nbsp;&nbsp;
@foreach($mark as $marks)
<tbody>
@foreach($marks->student as $student)
<td>{{$student->student_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>&nbsp;&nbsp;&nbsp;&nbsp;
@endforeach
@foreach($marks->subject as $subject)
<td>{{$subject->subject_name}}&nbsp;&nbsp;</td>&nbsp;&nbsp;
@endforeach
<td>{{$marks->marks}}&nbsp;&nbsp;</td>&nbsp;&nbsp;
</tbody>
@endforeach

</table></html>