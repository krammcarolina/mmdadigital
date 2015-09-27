<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>jQeury.steps Demos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo $urlLink;?>teste/css/normalize.css">
        <link rel="stylesheet" href="<?php echo $urlLink;?>teste/css/main.css">
        <link rel="stylesheet" href="<?php echo $urlLink;?>teste/css/jquery.steps.css">
        <script src="<?php echo $urlLink;?>teste/lib/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo $urlLink;?>teste/lib/jquery-1.9.1.min.js"></script>
        <script src="<?php echo $urlLink;?>teste/lib/jquery.cookie-1.3.1.js"></script>
        <script src="<?php echo $urlLink;?>teste/build/jquery.steps.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <h1>Wizard Demo</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Basic</a></li>
                    <li><a href="vertical.html">Vertical</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                </ul>
            </nav>
        </header>

        <div class="content">
            <h1>Basic Demo</h1>

            <script>
                $(function ()
                {
                    var form = $("#example-form");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
});
                });
            </script>
<section id="basic-form">
                <h2 class="page-header">Basic Form Example</h2>
                <p></p>
                <form id="example-form" action="#" style="" novalidate="novalidate">
                    <div role="application" class="wizard clearfix" id="steps-uid-8"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current error" aria-disabled="false" aria-selected="true"><a id="steps-uid-8-t-0" href="#steps-uid-8-h-0" aria-controls="steps-uid-8-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Account</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-8-t-1" href="#steps-uid-8-h-1" aria-controls="steps-uid-8-p-1"><span class="number">2.</span> Profile</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-8-t-2" href="#steps-uid-8-h-2" aria-controls="steps-uid-8-p-2"><span class="number">3.</span> Hints</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-8-t-3" href="#steps-uid-8-h-3" aria-controls="steps-uid-8-p-3"><span class="number">4.</span> Finish</a></li></ul></div><div class="content clearfix">
                        <h3 id="steps-uid-8-h-0" tabindex="-1" class="title current">Account</h3>
                        <section id="steps-uid-8-p-0" role="tabpanel" aria-labelledby="steps-uid-8-h-0" class="body current" aria-hidden="false">
                            <label for="userName">User name *</label>
                            <label for="userName" class="error">This field is required.</label><input id="userName" name="userName" type="text" class="required error">
                            <label for="password">Password *</label>
                            <label for="password" class="error">This field is required.</label><input id="password" name="password" type="text" class="required error">
                            <label for="confirm">Confirm Password *</label>
                            <label for="confirm" class="error">This field is required.</label><input id="confirm" name="confirm" type="text" class="required error">
                            <p>(*) Mandatory</p>
                        </section>

                        <h3 id="steps-uid-8-h-1" tabindex="-1" class="title">Profile</h3>
                        <section id="steps-uid-8-p-1" role="tabpanel" aria-labelledby="steps-uid-8-h-1" class="body" aria-hidden="true" style="display: none;">
                            <label for="name">First name *</label>
                            <input id="name" name="name" type="text" class="required">
                            <label for="surname">Last name *</label>
                            <input id="surname" name="surname" type="text" class="required">
                            <label for="email">Email *</label>
                            <input id="email" name="email" type="text" class="required email">
                            <label for="address">Address</label>
                            <input id="address" name="address" type="text">
                            <p>(*) Mandatory</p>
                        </section>

                        <h3 id="steps-uid-8-h-2" tabindex="-1" class="title">Hints</h3>
                        <section id="steps-uid-8-p-2" role="tabpanel" aria-labelledby="steps-uid-8-h-2" class="body" aria-hidden="true" style="display: none;">
                            <ul>
                                <li>Foo</li>
                                <li>Bar</li>
                                <li>Foobar</li>
                            </ul>
                        </section>

                        <h3 id="steps-uid-8-h-3" tabindex="-1" class="title">Finish</h3>
                        <section id="steps-uid-8-p-3" role="tabpanel" aria-labelledby="steps-uid-8-h-3" class="body" aria-hidden="true" style="display: none;">
                            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                        </section>
                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                </form>
                <details>
                    <summary role="button" aria-expanded="false"><span class="fa fa-caret-right"></span> Code</summary>
                    <div class="code tabcontrol clearfix" role="application" id="steps-uid-1"><div class="steps clearfix"><ul role="tablist"><li role="tab" aria-disabled="false" class="first current" aria-selected="true"><a id="steps-uid-1-t-0" href="#steps-uid-1-h-0" aria-controls="steps-uid-1-p-0"><span class="current-info audible">current step: </span>HTML</a></li><li role="tab" aria-disabled="false" class="last"><a id="steps-uid-1-t-1" href="#steps-uid-1-h-1" aria-controls="steps-uid-1-p-1">JavaScript</a></li></ul></div><div class="content clearfix">
                        <h3 id="steps-uid-1-h-0" tabindex="-1" class="title current">HTML</h3>
                        <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current" aria-hidden="false">
                            <pre class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"example-form"</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">    </span><span class="tag">&lt;div&gt;</span></li><li class="L2"><span class="pln">        </span><span class="tag">&lt;h3&gt;</span><span class="pln">Account</span><span class="tag">&lt;/h3&gt;</span></li><li class="L3"><span class="pln">        </span><span class="tag">&lt;section&gt;</span></li><li class="L4"><span class="pln">            </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"userName"</span><span class="tag">&gt;</span><span class="pln">User name *</span><span class="tag">&lt;/label&gt;</span></li><li class="L5"><span class="pln">            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"userName"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"userName"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"required"</span><span class="tag">&gt;</span></li><li class="L6"><span class="pln">            </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"password"</span><span class="tag">&gt;</span><span class="pln">Password *</span><span class="tag">&lt;/label&gt;</span></li><li class="L7"><span class="pln">            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"password"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"password"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"required"</span><span class="tag">&gt;</span></li><li class="L8"><span class="pln">            </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"confirm"</span><span class="tag">&gt;</span><span class="pln">Confirm Password *</span><span class="tag">&lt;/label&gt;</span></li><li class="L9"><span class="pln">            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"confirm"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"confirm"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"required"</span><span class="tag">&gt;</span></li><li class="L0"><span class="pln">            </span><span class="tag">&lt;p&gt;</span><span class="pln">(*) Mandatory</span><span class="tag">&lt;/p&gt;</span></li><li class="L1"><span class="pln">        </span><span class="tag">&lt;/section&gt;</span></li><li class="L2"><span class="pln">        </span><span class="tag">&lt;h3&gt;</span><span class="pln">Profile</span><span class="tag">&lt;/h3&gt;</span></li><li class="L3"><span class="pln">        </span><span class="tag">&lt;section&gt;</span></li><li class="L4"><span class="pln">            </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"name"</span><span class="tag">&gt;</span><span class="pln">First name *</span><span class="tag">&lt;/label&gt;</span></li><li class="L5"><span class="pln">            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"name"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"name"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"required"</span><span class="tag">&gt;</span></li><li class="L6"><span class="pln">            </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"surname"</span><span class="tag">&gt;</span><span class="pln">Last name *</span><span class="tag">&lt;/label&gt;</span></li><li class="L7"><span class="pln">            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"surname"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"surname"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"required"</span><span class="tag">&gt;</span></li><li class="L8"><span class="pln">            </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"email"</span><span class="tag">&gt;</span><span class="pln">Email *</span><span class="tag">&lt;/label&gt;</span></li><li class="L9"><span class="pln">            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"email"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"email"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"required email"</span><span class="tag">&gt;</span></li><li class="L0"><span class="pln">            </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"address"</span><span class="tag">&gt;</span><span class="pln">Address</span><span class="tag">&lt;/label&gt;</span></li><li class="L1"><span class="pln">            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"address"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"address"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">            </span><span class="tag">&lt;p&gt;</span><span class="pln">(*) Mandatory</span><span class="tag">&lt;/p&gt;</span></li><li class="L3"><span class="pln">        </span><span class="tag">&lt;/section&gt;</span></li><li class="L4"><span class="pln">        </span><span class="tag">&lt;h3&gt;</span><span class="pln">Hints</span><span class="tag">&lt;/h3&gt;</span></li><li class="L5"><span class="pln">        </span><span class="tag">&lt;section&gt;</span></li><li class="L6"><span class="pln">            </span><span class="tag">&lt;ul&gt;</span></li><li class="L7"><span class="pln">                </span><span class="tag">&lt;li&gt;</span><span class="pln">Foo</span><span class="tag">&lt;/li&gt;</span></li><li class="L8"><span class="pln">                </span><span class="tag">&lt;li&gt;</span><span class="pln">Bar</span><span class="tag">&lt;/li&gt;</span></li><li class="L9"><span class="pln">                </span><span class="tag">&lt;li&gt;</span><span class="pln">Foobar</span><span class="tag">&lt;/li&gt;</span></li><li class="L0"><span class="pln">            </span><span class="tag">&lt;/ul&gt;</span></li><li class="L1"><span class="pln">        </span><span class="tag">&lt;/section&gt;</span></li><li class="L2"><span class="pln">        </span><span class="tag">&lt;h3&gt;</span><span class="pln">Finish</span><span class="tag">&lt;/h3&gt;</span></li><li class="L3"><span class="pln">        </span><span class="tag">&lt;section&gt;</span></li><li class="L4"><span class="pln">            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"acceptTerms"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"acceptTerms"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"required"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"acceptTerms"</span><span class="tag">&gt;</span><span class="pln">I agree with the Terms and Conditions.</span><span class="tag">&lt;/label&gt;</span></li><li class="L5"><span class="pln">        </span><span class="tag">&lt;/section&gt;</span></li><li class="L6"><span class="pln">    </span><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="tag">&lt;/form&gt;</span></li></ol></pre>
                        </section>

                        <h3 id="steps-uid-1-h-1" tabindex="-1" class="title">JavaScript</h3>
                        <section id="steps-uid-1-p-1" role="tabpanel" aria-labelledby="steps-uid-1-h-1" class="body" aria-hidden="true" style="display: none;">
                            <pre class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><span class="kwd">var</span><span class="pln"> form </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="str">"#example-form"</span><span class="pun">);</span></li><li class="L1"><span class="pln">form</span><span class="pun">.</span><span class="pln">validate</span><span class="pun">({</span></li><li class="L2"><span class="pln">    errorPlacement</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> errorPlacement</span><span class="pun">(</span><span class="pln">error</span><span class="pun">,</span><span class="pln"> element</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> element</span><span class="pun">.</span><span class="pln">before</span><span class="pun">(</span><span class="pln">error</span><span class="pun">);</span><span class="pln"> </span><span class="pun">},</span></li><li class="L3"><span class="pln">    rules</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span></li><li class="L4"><span class="pln">        confirm</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span></li><li class="L5"><span class="pln">            equalTo</span><span class="pun">:</span><span class="pln"> </span><span class="str">"#password"</span></li><li class="L6"><span class="pln">        </span><span class="pun">}</span></li><li class="L7"><span class="pln">    </span><span class="pun">}</span></li><li class="L8"><span class="pun">});</span></li><li class="L9"><span class="pln">form</span><span class="pun">.</span><span class="pln">children</span><span class="pun">(</span><span class="str">"div"</span><span class="pun">).</span><span class="pln">steps</span><span class="pun">({</span></li><li class="L0"><span class="pln">    headerTag</span><span class="pun">:</span><span class="pln"> </span><span class="str">"h3"</span><span class="pun">,</span></li><li class="L1"><span class="pln">    bodyTag</span><span class="pun">:</span><span class="pln"> </span><span class="str">"section"</span><span class="pun">,</span></li><li class="L2"><span class="pln">    transitionEffect</span><span class="pun">:</span><span class="pln"> </span><span class="str">"slideLeft"</span><span class="pun">,</span></li><li class="L3"><span class="pln">    onStepChanging</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">event</span><span class="pun">,</span><span class="pln"> currentIndex</span><span class="pun">,</span><span class="pln"> newIndex</span><span class="pun">)</span></li><li class="L4"><span class="pln">    </span><span class="pun">{</span></li><li class="L5"><span class="pln">        form</span><span class="pun">.</span><span class="pln">validate</span><span class="pun">().</span><span class="pln">settings</span><span class="pun">.</span><span class="pln">ignore </span><span class="pun">=</span><span class="pln"> </span><span class="str">":disabled,:hidden"</span><span class="pun">;</span></li><li class="L6"><span class="pln">        </span><span class="kwd">return</span><span class="pln"> form</span><span class="pun">.</span><span class="pln">valid</span><span class="pun">();</span></li><li class="L7"><span class="pln">    </span><span class="pun">},</span></li><li class="L8"><span class="pln">    onFinishing</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">event</span><span class="pun">,</span><span class="pln"> currentIndex</span><span class="pun">)</span></li><li class="L9"><span class="pln">    </span><span class="pun">{</span></li><li class="L0"><span class="pln">        form</span><span class="pun">.</span><span class="pln">validate</span><span class="pun">().</span><span class="pln">settings</span><span class="pun">.</span><span class="pln">ignore </span><span class="pun">=</span><span class="pln"> </span><span class="str">":disabled"</span><span class="pun">;</span></li><li class="L1"><span class="pln">        </span><span class="kwd">return</span><span class="pln"> form</span><span class="pun">.</span><span class="pln">valid</span><span class="pun">();</span></li><li class="L2"><span class="pln">    </span><span class="pun">},</span></li><li class="L3"><span class="pln">    onFinished</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">event</span><span class="pun">,</span><span class="pln"> currentIndex</span><span class="pun">)</span></li><li class="L4"><span class="pln">    </span><span class="pun">{</span></li><li class="L5"><span class="pln">        alert</span><span class="pun">(</span><span class="str">"Submitted!"</span><span class="pun">);</span></li><li class="L6"><span class="pln">    </span><span class="pun">}</span></li><li class="L7"><span class="pun">});</span></li></ol></pre>
                        </section>
                    </div></div>
                </details>
            </section>
           


        </div>
    </body>
</html>