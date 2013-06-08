<?php
/**
 * Created by IntelliJ IDEA.
 * User: Johan
 * Date: 2013-05-15
 * Time: 20:02
 * To change this template use File | Settings | File Templates.
 */
?>
<article class="purple" id="rwd">
    <div class="images">
        <img src="/images/rwd.png" alt="" style=""/>
    </div>
    <div class="text">
        <h2>Responsive Web Design - RESS</h2>

        <p>
            Responsive Web Design is a way to design a website to fit a variety of different sized screen. Often thought
            of is a phone, a tablet and a desktop, but also screens such as tv, on freezers or car navigation
            system. The basic technology is to use a<i>grid</i>, allowing elements to jump around, images to flex
            and navigation switch from exemple a list to a dropdown. There are a lot of frameworks to get you started,
            <a href="http://designpin.co/5-responsive-web-design-frameworks/">Designpin</a> have a created a summery of
            5 popular framework, and I would like to add <a href="http://www.getskeleton.com/">Skeletron</a> and my own
            favorite <a href="http://responsiveboilerplate.com/">Responsive Boilerplate</a>, last one because of it's
            lightweghtness.
            The reason why companys want to adapt a RWD is because they sees it as a way to save money when they only
            need to create and maintain one responsive site instead of one www and one mobile, if they don't have mobile
            website, raise the exposure on the mobile web.
            This is all good but it's not sure companys will save money, design, development and testing is all much
            harder and more time consuming. It's also nearly impossible to get it right on the every devices and not
            every device have the capabilities to render you site, last but not least with normal RWD you will send the
            same information to a cellphone as to a desktop, more precisely the same 1980px wide image to a screen that
            could only show 320px forcing the user to download up 10 times the data that they would need to. That's
            where RESS come in to play.
        </p>
        <br/>

        <p>
            RESS, Responsive Web Design + Server Side Components, uses, a as the name says, server side components to
            figure out what data to send the user. For instance if your are browsing a site on a iPhone only a 640px
            wide image is needed (2x320px), knowing that an Windows Phone do not support swipe-actions and there by
            shows a alternative menu, knowing whether to show a link to Google Play or AppStore or if a user is browsing
            with early Internet Explorer with no support for CSS3. All this without the need to send a Javascript to
            figure it out for you wasting the users bandwidth. Read more at the <a href="#wew">wew-section.</a>
        </p>
    </div>
</article>
