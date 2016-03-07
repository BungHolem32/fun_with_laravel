
<a href="#" id="back-to-top" title="Back to top">&uarr;</a>

<section class='hidden_block' style="display: none;">
    <article class='popup'>
        <span class='title'>Enter Verification Code <span class='close'></span> </span>
			<span class='content'>
				<span class='content_text'>
				We have sent a verification code by SMS to the mobile number <span id='phone_number_span'>+987 7678987</span>. Please enter this code below to activate your account.
				</span>
				<input type='text' name='sms' id='sms_id' placeholder="Enter Code Here:" onfocus="setErrorCode(false); this.placeholder = ''" onblur="this.placeholder = 'Enter Code Here:'" >
				<button class='submit_code_btn' onclick="checkCode();">Verify</button>
				<a onclick="$('span.close').click(); $('#prefix').focus(); return false;" class='didnt_get_the_code_a' href='#'>Didn't get the code?</a>
				<span class='wrong_code_span'>Wrong code!</span>
				<ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
				<img src='/img/aussie/panel/ins.jpg' id='ins_img_id'>
			</span>
    </article>
</section>