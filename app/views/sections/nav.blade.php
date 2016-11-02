<div ng:controller="NavigationController" class="menu">
    <ul id="nav" class="sf-menu">
        <li ng-repeat="item in items">
            <a href="#[[item.path]]" ng-class="{'current-item': isActive(item)}">[[ item.title ]]
                <div class="nav-marker">
                    <span class="triangle">&nbsp;</span>
                </div>
            </a>
        </li>
    </ul>
</div>