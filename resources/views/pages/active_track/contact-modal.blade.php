<div class="modal-wrapper" id="contact--modal">
    <div class="contact-modal">
        <div class="contact--content">
            <h2>@lang('lock.contact-us')</h2>
            <form action="{{route('trackPost',[app()->getLocale()])}}" id="contact--form" method="post">
                <div class="input--group">
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="text" name="name" placeholder="@lang('lock.name')" required>
                    </div>
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="text" name="last-name" placeholder="@lang('lock.last-name')" required>
                    </div>
                </div>
                <div class="input--group">
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="email" name="email" placeholder="@lang('lock.email')" required>
                    </div>
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="number" name="phone-number" placeholder="@lang('lock.number')" required>
                    </div>

                </div>
                <div class="input--group">
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="text" name="company" placeholder="@lang('lock.company')" required>
                    </div>
                    <div class="input-item">
                        <span class="error"></span>
                        <input type="text" name="business" placeholder="@lang('lock.business')">
                    </div>
                </div>
                <div class="input-item">
                    <span class="error"></span>
                    <input type="text" name="website" placeholder="@lang('lock.website')">
                </div>
                <textarea name="info" id="info">@lang('lock.info')</textarea>
                <button type="submit" class="contact-submit">@lang('lock.send')</button>
            </form>
        </div>
    </div>
</div>
