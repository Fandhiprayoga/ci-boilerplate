<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'fandhi@testing.id';
    public string $fromName   = 'ci-boilerplate';
    public string $recipients = '';

    public $SMTPHost;
    public $SMTPPort;
    public $SMTPUser;
    public $SMTPPass;
    public $SMTPCrypto;
    public $protocol;

    public function __construct()
    {
        parent::__construct();

        // Mengambil nilai dari variabel lingkungan
        $this->SMTPHost = getenv('smtp.host');
        $this->SMTPPort = intval(getenv('smtp.port'));
        $this->SMTPUser = getenv('smtp.user');
        $this->SMTPPass = getenv('smtp.pass');
        $this->SMTPCrypto = getenv('smtp.crypto');
        $this->protocol = getenv('smtp.protocol');

    }
    /**
     * The "user agent"
     */
    public string $userAgent = 'CodeIgniter';

    /**
     * The mail sending protocol: mail, sendmail, smtp
     */
    // public string $protocol = 'smtp';

    /**
     * The server path to Sendmail.
     */
    public string $mailPath = '/usr/sbin/sendmail';

    /**
     * SMTP Server Hostname
     */
    // public string $SMTPHost = env('smtp.host');

    /**
     * SMTP Username
     */
    // public string $SMTPUser = env('smtp.user');

    /**
     * SMTP Password
     */
    // public string $SMTPPass = env('smtp.pass');

    /**
     * SMTP Port
     */
    // public int $SMTPPort = env('smtp.port');

    /**
     * SMTP Timeout (in seconds)
     */
    public int $SMTPTimeout = 5;

    /**
     * Enable persistent SMTP connections
     */
    public bool $SMTPKeepAlive = false;

    /**
     * SMTP Encryption.
     *
     * @var string '', 'tls' or 'ssl'. 'tls' will issue a STARTTLS command
     *             to the server. 'ssl' means implicit SSL. Connection on port
     *             465 should set this to ''.
     */
    // public string $SMTPCrypto = env('smtp.crypto');

    /**
     * Enable word-wrap
     */
    public bool $wordWrap = true;

    /**
     * Character count to wrap at
     */
    public int $wrapChars = 76;

    /**
     * Type of mail, either 'text' or 'html'
     */
    public string $mailType = 'text';

    /**
     * Character set (utf-8, iso-8859-1, etc.)
     */
    public string $charset = 'UTF-8';

    /**
     * Whether to validate the email address
     */
    public bool $validate = false;

    /**
     * Email Priority. 1 = highest. 5 = lowest. 3 = normal
     */
    public int $priority = 3;

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $CRLF = "\r\n";

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $newline = "\r\n";

    /**
     * Enable BCC Batch Mode.
     */
    public bool $BCCBatchMode = false;

    /**
     * Number of emails in each BCC batch
     */
    public int $BCCBatchSize = 200;

    /**
     * Enable notify message from server
     */
    public bool $DSN = false;
}
