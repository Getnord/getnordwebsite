<div class="modal-wrapper" id="contact--modal">
    <div class="contact-modal">
        <div class="contact--content">
            <h2>Contact with us</h2>
            <form action="{{route('lockPost',[app()->getLocale()])}}" id="contact--form" method="post">
                <div class="input--group">
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="text" name="name" placeholder="Your name" required>
                    </div>
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="text" name="last-name" placeholder="Your last name" required>
                    </div>
                </div>
                <div class="input--group">
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="email" name="email" placeholder="email address" required>
                    </div>
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="number" name="phone-number" placeholder="phone number" required>
                    </div>

                </div>
                <div class="input--group">
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="text" name="company" placeholder="company" required>
                    </div>
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="text" name="business" placeholder="type of business">
                    </div>
                </div>
                <div class="input-item">
                    <span class="error"></span>
                    <input type="text" name="website" placeholder="company website">
                </div>
                <textarea name="info" id="info">Additional information</textarea>
                <button type="submit" class="contact-submit">Send</button>
            </form>
        </div>
    </div>
</div>
