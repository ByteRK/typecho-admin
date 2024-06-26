<?php
include 'common.php';
include 'header.php';
include 'menu.php';
Typecho_Widget::widget('Widget_Metas_Category_Admin')->to($categories);
$users = \Widget\Users\Admin::alloc();
?>


<?php include 'menu_title.php'; ?>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <div class="clearfix">
                        <h3 style="float: left;margin-right: 16px;">管理用户</h3>
                        <a href="/admin/user.php" class="btn btn-primary btn-sm">新增</a>
                    </div>
                    <p class="text-sm mb-0">
                    </p>
                </div>
                <div class="table-responsive py-4">
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <form method="get">
                            <div class="dt-buttons btn-group">
                                <div class="operate" style="margin-bottom: 4px;">
                                    <label><i class="sr-only"><?php _e('全选'); ?></i><input type="checkbox" class="typecho-table-select-all" /></label>
                                    <div class="btn-group btn-drop">
                                        <button class="btn dropdown-toggle btn-s" type="button"><i class="sr-only"><?php _e('操作'); ?></i><?php _e('选中项'); ?></button>
                                        <ul class="dropdown-menu">
                                            <li><a lang="<?php _e('你确认要删除这些用户吗?'); ?>" href="<?php $security->index('/action/users-edit?do=delete'); ?>"><?php _e('删除'); ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="datatable-buttons_filter" class="dataTables_filter">
                                <div class="search" role="search">
                                    <?php if ('' != $request->keywords): ?>
                                        <a href="<?php $options->adminUrl('manage-users.php'); ?>"><?php _e('&laquo; 取消筛选'); ?></a>
                                    <?php endif; ?>
                                    <input type="text" class="text-s" style="height:32px;" placeholder="<?php _e('请输入关键字'); ?>" value="<?php echo htmlspecialchars($request->keywords ?? ''); ?>" name="keywords" />
                                    <button type="submit" class="btn btn-s"><?php _e('筛选'); ?></button>
                                </div>
                            </div>
                        </form>
                        <form method="post" name="manage_users" class="operate-form">
                            <table class="table align-items-center table-flush table-hover typecho-list-table">
                            <thead class="thead-light">
                            <tr>
                                <th> </th>
                                <th> </th>
                                <th><?php _e('用户名'); ?></th>
                                <th><?php _e('昵称'); ?></th>
                                <th><?php _e('电子邮件'); ?></th>
                                <th><?php _e('用户组'); ?></th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php while($users->next()): ?>
                                <tr id="user-<?php $users->uid(); ?>">
                                    <td><input type="checkbox" value="<?php $users->uid(); ?>" name="uid[]"/></td>
                                    <td><a href="<?php $options->adminUrl('manage-posts.php?uid=' . $users->uid); ?>" class="balloon-button left size-<?php echo Typecho_Common::splitByCount($users->postsNum, 1, 10, 20, 50, 100); ?>"><?php $users->postsNum(); ?></a></td>
                                    <td><a href="<?php $options->adminUrl('user.php?uid=' . $users->uid); ?>"><?php $users->name(); ?></a>
                                        <a href="<?php $users->permalink(); ?>" title="<?php _e('浏览 %s', $users->screenName); ?>"><i class="i-exlink"></i></a>
                                    </td>
                                    <td><?php $users->screenName(); ?></td>
                                    <td><?php if($users->mail): ?><a href="mailto:<?php $users->mail(); ?>"><?php $users->mail(); ?></a><?php else: _e('暂无'); endif; ?></td>
                                    <td><?php switch ($users->group) {
                                            case 'administrator':
                                                _e('管理员');
                                                break;
                                            case 'editor':
                                                _e('编辑');
                                                break;
                                            case 'contributor':
                                                _e('贡献者');
                                                break;
                                            case 'subscriber':
                                                _e('关注者');
                                                break;
                                            case 'visitor':
                                                _e('访问者');
                                                break;
                                            default:
                                                break;
                                        } ?></td>
                                </tr>
                            <?php endwhile; ?>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer-html.php';?>
</div>

<?php
include 'common-js.php';
include 'table-js.php';
include 'footer.php';
?>
