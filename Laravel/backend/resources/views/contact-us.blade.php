<div class="Msg_div">
    @if(Session::has("message_sent"))
        <div >
            {{Session::get("message_sent")}}
        </div>
    @endif
    <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
    @csrf
    <div class="Color"></div>
        <p class="Contact"><span>Contact M</span>e</p>
        <p>Fell free to send me a private message :)</p>
        <input name="name" type="text" placeholder="name">
        <input name="email"type="text" placeholder="email">
        <input name="message" type="text" placeholder="message">
        <button type="submit">SEND</button>
    </div>
    </form>