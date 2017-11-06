<?php
class Tests_AnsPress extends AnsPress_UnitTestCase
{

	public function setUp() {
		// before
		parent::setUp();
		// your set up methods here
	}

	public function tearDown() {
		// your tear down methods here
		// then
		parent::tearDown();
	}

	public function test_anspress_instance() {
		$this->assertClassHasStaticAttribute( 'instance', 'AnsPress' );
	}

	/**
	 * @covers AnsPress::setup_constants
	 */
	public function test_constants() {
		$tests_dir = 'tests/';
		$plugin_dir = str_replace( 'tests/', '', wp_normalize_path( plugin_dir_path( __FILE__ ) ) );
		$plugin_url = str_replace( 'tests/', '', plugin_dir_url( __FILE__ ) );

		$this->assertSame( ANSPRESS_URL, $plugin_url );
		$this->assertSame( ANSPRESS_DIR, $plugin_dir );

		$path = $plugin_dir . 'widgets/';
		$this->assertSame( ANSPRESS_WIDGET_DIR, $path );

		$path = $plugin_dir . 'templates';
		$this->assertSame( ANSPRESS_THEME_DIR, $path );

		$path = $plugin_url . 'templates';
		$this->assertSame( ANSPRESS_THEME_URL, $path );

		$this->assertSame( ANSPRESS_CACHE_DIR, WP_CONTENT_DIR . '/cache/anspress' );
		$this->assertSame( ANSPRESS_CACHE_TIME, HOUR_IN_SECONDS );

		$path = $plugin_dir . 'addons';
		$this->assertSame( ANSPRESS_ADDONS_DIR, $path );
	}

	/**
	 * @covers AnsPress::includes
	 */
	public function test_include() {
		// Check main PHP file exists.
		$this->assertFileExists( ANSPRESS_DIR . 'anspress-question-answer.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'activate.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/class/roles-cap.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/common-pages.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/class-theme.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/class-form-hooks.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/options.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/functions.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/hooks.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/question-loop.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/answer-loop.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/qameta.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/qaquery.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/qaquery-hooks.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/post-types.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/post-status.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/votes.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/views.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/theme.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/shortcode-basepage.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/process-form.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/rewrite.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/deprecated.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/flag.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/shortcode-question.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/akismet.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/comments.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/upload.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/taxo.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/reputation.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/subscribers.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'includes/class-query.php' );

		$this->assertFileExists( ANSPRESS_DIR . 'widgets/search.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'widgets/question_stats.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'widgets/questions.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'widgets/breadcrumbs.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'widgets/ask-form.php' );

		$this->assertFileExists( ANSPRESS_DIR . 'lib/class-anspress-upgrader.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/class-form.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-field.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-input.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-group.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-repeatable.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-checkbox.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-select.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-editor.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-upload.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-tags.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-radio.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/form/class-textarea.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/class-validate.php' );
		$this->assertFileExists( ANSPRESS_DIR . 'lib/class-anspress-cli.php' );

		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/avatar.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/buddypress.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/category.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/category/widget.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/email.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/email/class-email.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/notification.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/notification/functions.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/notification/query.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/profile.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/recaptcha.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/recaptcha.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/autoload.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/class-recaptcha.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/ReCaptcha/ReCaptcha.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/ReCaptcha/RequestMethod.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/ReCaptcha/RequestParameters.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/ReCaptcha/Response.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/ReCaptcha/RequestMethod/Curl.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/ReCaptcha/RequestMethod/CurlPost.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/ReCaptcha/RequestMethod/Post.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/ReCaptcha/RequestMethod/Socket.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/reputation/ReCaptcha/RequestMethod/SocketPost.php' );
		$this->assertFileExists( ANSPRESS_ADDONS_DIR . 'free/tag.php' );

		$this->assertFileExists( ANSPRESS_DIR . 'readme.txt' );

		// Check template file exists.
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/answer-form.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/answer.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/answers.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/archive.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/ask.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/attachments.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/comment.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/content-answer.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/content-none.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/edit.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/functions.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/list-head.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/login-signup.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/not-found.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/question-list-item.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/question-list.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/search-form.php' );
		$this->assertFileExists( ANSPRESS_THEME_DIR . '/single-question.php' );

		$this->assertFileExists( ANSPRESS_DIR . '/assets/question.png' );
		$this->assertFileExists( ANSPRESS_DIR . '/assets/answer.png' );
		$this->assertFileExists( ANSPRESS_DIR . '/assets/ap-admin.min.css' );
		$this->assertFileExists( ANSPRESS_DIR . '/assets/ap-admin.scss' );
		$this->assertFileExists( ANSPRESS_DIR . '/assets/ap-admin.scss' );

		$this->assertFileExists( ANSPRESS_DIR . '/assets/js/admin-app.min.js' );
		$this->assertFileExists( ANSPRESS_DIR . '/assets/js/ap-admin.min.js' );
		$this->assertFileExists( ANSPRESS_DIR . '/assets/js/common.min.js' );
		$this->assertFileExists( ANSPRESS_DIR . '/assets/js/main.min.js' );
		$this->assertFileExists( ANSPRESS_DIR . '/assets/js/tinymce-plugin.min.js' );

		$this->assertFileExists( ANSPRESS_DIR . '/languages/anspress-question-answer.pot' );
	}
}