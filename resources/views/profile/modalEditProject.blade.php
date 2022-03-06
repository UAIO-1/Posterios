<div class="modal fade" id="exampleModalEditProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Edit Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  action={{ url('/editProject') }} method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Project Title</label>
                        <input class="form-control" type="text" name="project_title" value="{{ $p->project_title }}">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Project Category</label>
                        <select name="project_category" class="form-control">
                            @if ($p->project_category == "Science")
                                <option value="Science">Science</option>
                                <option value="Technology">Technology</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Mathematics">Mathematics</option>
                            @elseif ($p->project_category == "Technology")
                                <option value="Technology">Technology</option>
                                <option value="Science">Science</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Mathematics">Mathematics</option>
                            @elseif ($p->project_category == "Engineering")
                                <option value="Engineering">Engineering</option>
                                <option value="Science">Science</option>
                                <option value="Technology">Technology</option>
                                <option value="Mathematics">Mathematics</option>
                            @else
                                <option value="Mathematics">Mathematics</option>
                                <option value="Science">Science</option>
                                <option value="Technology">Technology</option>
                                <option value="Engineering">Engineering</option>
                            @endif
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Project Link</label>
                        <input class="form-control" type="url" name="project_link" value="{{ $p->project_link }}">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Project Image</label>
                        <input class="form-control" type="file" id="formFile" name="project_image" accept="image/jpg, image/jpeg, image/png">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="project_description" rows="10">{{ $p->project_description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Project Video</label>
                        <input class="form-control" type="file" id="formFile" name="project_video" accept="video/mp4">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-warning text-light" value="Save Changes">
            </div>
            </form>
        </div>
    </div>
</div>
