<form class="edit-profile" action="#" method="POST" enctype="multipart/form-data">
                        <div class="">
                            <label for="img">
                            <img class="profile__avatar" src="../upload/<? echo $user['avatar']; ?>" alt="">
                                <input class="inputFile" type="file" id="img" name="avatar">
                                <p class="imgButton" style="margin-top: 10px;">Изменить картинку</p>
                            </label>
                        </div>
                        <div class="profile__info">
                            <h3 class="profile__name">
                                <?
                                    echo $user['login'];
                                ?>
                            </h3>
                            <div class="edit-profile__data">
                                <?
                                    require_once '../../controller/editProfile.controller.php';
                                ?>
                                <div class="edit-profile__description">
                                    <p>Описание</p>
                                    <textarea name="user_edit-description"><?echo $user['description'];?></textarea>
                                </div>
                                <button name="user__edit-save">Сохранить</button>
                            </div>
                        </div>
                    </form>