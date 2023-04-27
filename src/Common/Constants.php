<?php

namespace PCM\Idgobpe\Common;

/**
 * Created by Miguel Pazo <http://miguelpazo.com>.
 */
class Constants
{
    const ACR_ONE_FACTOR = 'one_factor';
    const ACR_TWO_FACTOR = 'two_factor';
    const ACR_CERTIFICATE_DNIE = 'certificate_dnie';
    const ACR_CERTIFICATE_TOKEN = 'certificate_token';
    const ACR_CERTIFICATE_DNIE_LEGACY = 'certificate_dnie_legacy';
    const ACR_CERTIFICATE_TOKEN_LEGACY = 'certificate_token_legacy';
    const PROMPT_NONE = 'none';
    const PROMPT_LOGIN = 'login';
    const PROMPT_CONSENT = 'consent';
    const SCOPE_PROFILE = 'profile';
	const SCOPE_EMAIL = 'email';
	const SCOPE_PHONE = 'phone';
    const SCOPE_OFFLINE_ACCESS = 'offline_access';
}
