<form action="/rest" method="post">
    <table>
        @csrf
        <tr>
            <th>message: </th>
            <td><input type="text" name="message" value='{{old("message")}}'></td>
        </tr>
        <tr>
            <th>url: </th>
            <td><input type="text" name="message" value='{{old("url")}}'></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submmit" value="send"></td>
        </tr>
    </table>
</form>
