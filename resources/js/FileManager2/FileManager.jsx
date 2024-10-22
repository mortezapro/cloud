import React from "react";
const FileManager = () => {
    return(
        <>
            <div id="folder-list" className="mb-2">
                <div className="row justify-content-beetwen g-2 mb-3">
                    <div className="col">
                        <div className="d-flex align-items-center">
                            <div className="flex-shrink-0 me-2 d-block d-lg-none">
                                <button type="button"
                                        className="btn btn-soft-success btn-icon btn-sm fs-16 file-menu-btn">
                                    <i className="ri-menu-2-fill align-bottom"/>
                                </button>
                            </div>
                            <div className="flex-grow-1">
                                <h5 className="fs-16 mb-0">محتوا</h5>
                            </div>
                        </div>
                    </div>
                    <div className="col-auto">
                        <div className="d-flex gap-2 align-items-start">
                            <button className="btn btn-success w-sm create-folder-modal flex-shrink-0"
                                    data-bs-toggle="modal" data-bs-target="#createFolderModal"><i
                                className="ri-add-line align-bottom me-1"/> ایجاد پوشه
                            </button>
                        </div>
                    </div>
                </div>
                <div className="row" id="folderlist-data">
                    <div className="col-xxl-2 col-6 folder-card">

                    </div>
                </div>
            </div>
        </>
    )
}
export default FileManager;
