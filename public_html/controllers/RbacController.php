<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
/**
 * ������������� RBAC ����������� � ������� php yii rbac/init
 */
class RbacController extends Controller {

    public function actionInit() {
        $auth = Yii::$app->authManager;
        
        $auth->removeAll(); //�� ������ ������ ������� ������ ������ �� ��...
        
        // �������� ���� ������ � ��������� ��������
        $admin = $auth->createRole('admin');
        $editor = $auth->createRole('editor');
        
        // ������� �� � ��
        $auth->add($admin);
        $auth->add($editor);
        
        // ������� ����������. ��������, �������� ������� viewAdminPage � �������������� ������� updateNews
        $viewAdminPage = $auth->createPermission('viewAdminPage');
        $viewAdminPage->description = '�������� �������';
        
        $updateNews = $auth->createPermission('updateNews');
        $updateNews->description = '�������������� �������';
        
        // ������� ��� ���������� � ��
        $auth->add($viewAdminPage);
        $auth->add($updateNews);
        
        // ������ ������� ������������. ��� ���� editor �� ������� ���������� updateNews,
        // � ��� ������ ������� ������������ �� ���� editor � ��� ������� ����������� ���������� viewAdminPage
        
        // ���� ��������� �������� ����������� ���������� ��������������� �������
        $auth->addChild($editor,$updateNews);

        // ����� ��������� ���� ��������� ��������. �� �� �����, ������ ����� ��! :D
        $auth->addChild($admin, $editor);
        
        // ��� ����� ����� ����������� ���������� - ��������� �������
        $auth->addChild($admin, $viewAdminPage);

        // ��������� ���� admin ������������ � ID 1
        $auth->assign($admin, 1); 
        
        // ��������� ���� editor ������������ � ID 2
        $auth->assign($editor, 2);
    }
}