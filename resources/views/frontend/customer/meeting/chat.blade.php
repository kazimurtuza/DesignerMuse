@extends('frontend.layout.layout')
@section('main_content')
    <!-- Project nav -->

    <!-- Projects Table -->
    <section class="projects-table">
        <div class="page-chat">
            <div class="container">
                <div class="content-chat mt-20">
                    <div class="content-chat-user">
                        <div class="head-search-chat">
                            <h4 class="text-center">Chat Title</h4>
                        </div>

                        <div class="search-user mt-30">
                            <input
                                id="search-input"
                                type="text"
                                placeholder="Search..."
                                name="search"
                                class="search"
                            />
                            <span>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                        </div>

                        <div class="list-search-user-chat mt-20">
                            <div class="user-chat active" data-username="Maria Dennis">
                                <div class="user-chat-img">
                                    <img
                                        src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt=""
                                    />
                                    <div class="offline"></div>
                                </div>

                                <div class="user-chat-text">
                                    <p class="mt-0 mb-0">
                                        <strong>Maria Dennis</strong>
                                    </p>
                                    <small>Hi, how are you?</small>
                                </div>
                            </div>

                            <div
                                class="user-chat"
                                data-username="Jorge Harrinson"
                            >
                                <div class="user-chat-img">
                                    <img
                                        src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt=""
                                    />
                                    <div class="online"></div>
                                </div>

                                <div class="user-chat-text">
                                    <p class="mt-0 mb-0">
                                        <strong>Jorge Harrinson</strong>
                                    </p>
                                    <small>Hi, how are you?</small>
                                </div>
                            </div>

                            <div class="user-chat" data-username="Carla Terry">
                                <div class="user-chat-img">
                                    <img
                                        src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt=""
                                    />
                                    <div class="offline"></div>
                                </div>

                                <div class="user-chat-text">
                                    <p class="mt-0 mb-0">
                                        <strong>Carla Terry</strong>
                                    </p>
                                    <small>Hi, how are you?</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="content-chat-message-user"
                        data-username="Maria Dennis"
                    >
                        <div class="head-chat-message-user">
                            <img
                                src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt=""
                            />
                            <div class="message-user-profile">
                                <p class="mt-0 mb-0 text-white">
                                    <strong>Maria Dennis</strong>
                                </p>
                                <small class="text-white"
                                ><p class="offline mt-0 mb-0"></p>
                                    Offline</small
                                >
                            </div>
                        </div>
                        <div class="body-chat-message-user">
                            <div class="message-user-left">

                                <div class="message-user-left-text">
                                    <p>Hi!</p>
                                    <div class="time">17:59 AM</div>
                                </div>
                            </div>
                            <div class="message-user-right">
                                <div class="message-user-right-text">
                                    <p>Lorem ipsum dolor.</p>
                                    <div class="time">17:59 AM</div>
                                </div>
                            </div>

                            <div class="message-user-left">
                                <div class="message-user-left-text">
                                    <p>Lorem ipsum dolor sit!</p>
                                    <div class="time">17:59 AM</div>
                                </div>
                            </div>
                            <div class="message-user-right">
                                <div class="message-user-right-text">
                                    <p>Yes!</p>
                                    <div class="time">17:59 AM</div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-chat-message-user">
                            <div class="message-user-send">
                                <input type="text" placeholder="Aa"/>
                            </div>
                            <button type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none"
                                     class="h-4 w-4 m-1 md:m-0" stroke-width="2">
                                    <path
                                        d="M.5 1.163A1 1 0 0 1 1.97.28l12.868 6.837a1 1 0 0 1 0 1.766L1.969 15.72A1 1 0 0 1 .5 14.836V10.33a1 1 0 0 1 .816-.983L8.5 8 1.316 6.653A1 1 0 0 1 .5 5.67V1.163Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{route('add.project.file')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <input type="hidden" name="project_id" id="projectId">
                    <input type="hidden" name="user_type" value="1" id="projectId">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add File</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">File</label>
                            <input type="file" class="form-control" name="project_file" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection
@section('js_plugins')
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/chat.css" />
@endsection
@section('js')
    <script>
        function setprojectId(id) {
            $('#projectId').val(id);
        }
    </script>

    <script>
        const items = document.querySelectorAll(".accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute("aria-expanded");

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute("aria-expanded", "false");
            }

            if (itemToggle == "false") {
                this.setAttribute("aria-expanded", "true");
            }
        }

        items.forEach((item) =>
            item.addEventListener("click", toggleAccordion)
        );
    </script>
@endsection


