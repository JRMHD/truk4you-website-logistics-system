<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Email">
    <input type="text" name="subject" placeholder="Subject">
    <textarea name="message" placeholder="Your Message"></textarea>
    <button type="submit">Send Message</button>
</form>
