declare namespace App.Domain.Domain.MediaLibrary {
    export type ImageAttributes = {
        src: string;
        srcset: string;
        loadingAttributeValue: string;
        conversion: string;
        width: string;
        height: string;
    };
}
declare namespace App.Domain.User.DataTransfertObjects {
    export type UserData = {
        id: any | number | null;
        tag_number: number;
        password: string;
        email: string;
        balance: any | number;
        email_verified_at: any | string | null;
        remember_token: any | string | null;
        confirm_password: any | string | null;
        deleted_at: any | any | string | null;
        created_at: any | any | string | null;
        updated_at: any | any | string | null;
    };
    export type UserLoginData = {
        tag_number: any | number | null;
        email: any | string | null;
        password: any | string | null;
        remember: any | number | boolean | null;
    };
    export type UserLoginEmailData = {
        email: string;
        password: string;
        remember: boolean;
    };
    export type UserLoginTagNumberData = {
        tag_number: string;
    };
    export type UserProfileImageData = {
        profile_image: any;
    };
    export type UserRegistrationData = {
        tag_number: number;
        password: string;
        email: string;
        first_name: string;
        last_name: string;
    };
    export type UserUpdateProfileData = {
        id: number;
        email: any | string;
        password: any | string;
        password_confirmation: any | string;
        tag_number: any | string;
    };
}
