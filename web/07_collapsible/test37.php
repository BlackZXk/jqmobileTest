<!doctype html>
<html lang="en">
<head>
    <?php include '../common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>嵌套的可折叠块</title>
</head>
<body>
<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>嵌套的可折叠块</h1>
    </div>

    <div data-role="main" class="ui-content">
        <div data-role="collapsible">
            <h1>点击我 - 我可以折叠！</h1>
            <p>我是可折叠的内容。</p>
            <div data-role="collapsible">
                <h1>点击我 - 我是嵌套的可折叠块！</h1>
                <p>我是嵌套的可折叠块中被展开的内容。</p>
            </div>
        </div>
    </div>

    <div data-role="footer">
        <h1>页脚文本</h1>
    </div>
</div>
</body>
</html>