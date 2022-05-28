<style>
    .forgot {
        float: none;
        width: 400px;
        margin: 0 auto;
        border: 1px solid #9a9a9a;
        box-shadow: 1px 1px 7px 1px;
        padding: 0px 20px;

    }
    .forgot p {
        font-size: 18px;
    }

    .forgot h4 {
        font-size: 18px;
    }

    .forgot h6 {
        font-size: 18px;
    }
</style>
<div class="forgot">
    <p>Dear <b>Admin,</b></p>
    <table style='width:80%'>
        <tr>
            <td>
                <h2 style='font-family:nirmala UI; width:100%; font-size:25px; margin:0;  color:#6e6e6e; text-align:left;'>INQUIRY FORM</h2>
                <hr style='border-color:#ffcc42; border:1px solid;' />
            </td>
        </tr>
    </table> 
    <table style='margin-top:10px; width:80%; border:1px solid;'>
        <tr>
            <td style='text-align:left;width:30%; font-family:nirmala UI;color:#333;font-size:12px; padding:5px; '>NAME</td>
            <td style='text-align:left;font-family:nirmala UI;width:50%;color:#333;font-size:12px;background-color:#fff; padding-left:5px; border-left:1px solid;'>{{$name}}</td>
        </tr>
    </table>
    <table style='margin-top:1px; width:80%; border:1px solid;'>
        <tr>
            <td style='text-align:left;width:30%; font-family:nirmala UI;color:#333;font-size:12px; padding:5px;'>EMAIL</td>
            <td style='text-align:left;font-family:nirmala UI;width:50%;color:#333;font-size:12px;background-color:#fff; padding-left:5px; border-left:1px solid;'>{{$email}}</td>
        </tr>
    </table>
    <table style='margin-top:1px; width:80%; border:1px solid;'>
        <tr>
            <td style='text-align:left;width:30%; font-family:nirmala UI;color:#333;font-size:12px; padding:5px;'>PHONE</td>
            <td style='text-align:left;font-family:nirmala UI;width:50%;color:#333;font-size:12px;background-color:#fff; padding-left:5px; border-left:1px solid;'>{{$phone}}</td>
        </tr>
    </table>
    <table style='margin-top:1px; width:80%; border:1px solid;'>
        <tr>
            <td style='text-align:left;width:30%; font-family:nirmala UI;color:#333;font-size:12px; padding:5px;'>Messages</td>
            <td style='text-align:left;font-family:nirmala UI;width:50%;color:#333;font-size:12px;background-color:#fff; padding-left:5px; border-left:1px solid;'>{{$details}}</td>
        </tr>
    </table>
    <P></P>

    <p>- A Review System</p>

</div>

